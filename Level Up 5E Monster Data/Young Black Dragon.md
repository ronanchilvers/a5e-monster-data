---
statblock: true
name: 'Young Black Dragon'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Dragon
cr: 9
ac: 18
hp: 144
hit_dice: '17d10 + 51'
speed: '40 ft., fly 80 ft., swim 40 ft.'
stats:
    - 18
    - 14
    - 16
    - 12
    - 12
    - 14
damage_immunities: acid
saves:
    - { dexterity: 6 }
    - { constitution: 7 }
    - { wisdom: 5 }
    - { charisma: 6 }
skillsaves:
    - { history: 5 }
    - { perception: 5 }
    - { stealth: 6 }
senses: 'blindsight 30 ft., darkvision 120 ft., passive Perception 18'
languages: 'Common, Draconic'
traits:
    0: { name: Ambusher, desc: "When submerged in water, the dragon has advantage on Stealth checks. If the dragon hits a creature that can't see it with its bite, it can deal piercing damage and grapple the target simultaneously." }
    1: { name: Amphibious, desc: 'The dragon can breathe air and water.' }
    2: { name: 'Ruthless (1/Round)', desc: 'After scoring a critical hit on its turn, the dragon can immediately make one claw attack.' }
    3: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 14). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:fog cloud, pass without trace']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws.' }
    - { name: Bite, desc: "Melee Weapon Attack: +8 to hit, reach 10 ft., one target. Hit: 20 (3d10 + 4) piercing damage plus 4 (1d8) acid damage. Instead of dealing piercing damage, the dragon can grapple the target (escape DC 16), and a Medium or smaller creature grappled in this way is restrained. While grappling a creature, the dragon can't bite another creature." }
    - { name: Claw, desc: 'Melee Weapon Attack: +8 to hit, reach 5 ft., one target. Hit: 13 (2d8 + 4) slashing damage.' }
    - { name: 'Acid Breath (Recharge 56)', desc: 'The dragon exhales sizzling acid in a 40-foot-long, 5-foot-wide line. Each creature in that area makes a DC 15 Dexterity saving throw, taking 45 (10d8) acid damage on a failed save or half damage on a success. A creature that fails the save is blinded until the end of its next turn.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Young Black Dragon
```
