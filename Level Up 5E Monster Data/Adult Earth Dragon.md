---
statblock: true
name: 'Adult Earth Dragon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Dragon
cr: 18
ac: 19
hp: 287
hit_dice: '23d12 + 138'
speed: '40 ft., fly 40 ft., burrow 60 ft.'
stats:
    - 22
    - 14
    - 22
    - 22
    - 14
    - 20
damage_resistances: 'damage from nonmagical weapons'
condition_immunities: petrified
saves:
    - { strength: 12 }
    - { constitution: 12 }
    - { intelligence: 8 }
    - { wisdom: 8 }
    - { charisma: 7 }
skillsaves:
    - { athletics: 12 }
    - { insight: 8 }
    - { nature: 12 }
    - { perception: 8 }
senses: 'darkvision 120 ft., tremorsense 90 ft., passive Perception 21'
languages: 'Common, Draconic, Terran'
traits:
    0: { name: 'Earth Glide', desc: 'The dragon can burrow through nonmagical, unworked earth and stone without disturbing it.' }
    1: { name: 'False Appearance', desc: 'While the dragon remains motionless within its linked area, it is indistinguishable from a natural rocky outcropping.' }
    2: { name: 'Legendary Resistance (3/Day)', desc: 'When the dragon fails a saving throw, it can choose to succeed instead. When it does, it becomes more like rock. Its movement is halved until the end of its next turn.' }
    3: { name: 'Essence Link', desc: 'The essence dragon is spiritually linked to a specific area or landmark. The dragon gains no benefit from a long rest when more than 1 mile away from its linked area. If the dragon dies, the area it is linked to loses its vital essence until it forms a new essence dragon, which can take centuries. When a creature first enters an area that has lost its vital essence in this way, they gain a level of fatigue and a level of strife. This fatigue and strife can be removed only by completing a long rest outside the area.' }
    4: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 15). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:locate animals or plants, spike growth, stone shape, wall of stone']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its slam. In place of its bite attack, it can use Rock Spire.' }
    - { name: Bite, desc: "Melee Weapon Attack: +12 to hit, reach 10 ft., one target. Hit: 28 (4d10 + 6) piercing damage. Instead of dealing piercing damage, the dragon can grapple the target (escape DC 20), and a Large or smaller creature grappled in this way is restrained. While grappling a creature, the dragon can't bite another target." }
    - { name: Slam, desc: 'Melee Weapon Attack: +12 to hit, reach 5 ft., one target. Hit: 19 (3d8 + 6) bludgeoning damage.' }
    - { name: 'Scouring Breath (Recharge 56)', desc: 'The dragon exhales scouring sand and stones in a 60-foot cone. Each creature in that area makes a DC 20 Dexterity saving throw, taking 56 (16d6) slashing damage on a failed save or half damage on a success. A creature that fails the save is also blinded until the end of its next turn.' }
    - { name: 'Rock Spire', desc: "A permanent, 25-foot-tall, 5-foot-radius spire of rock magically rises from a point on the ground within 60 feet. A creature in the spire's area when it appears makes a DC 19 Dexterity saving throw, taking 13 (3d8) piercing damage on a failure or half damage on a success. A creature that fails this saving throw by 10 or more is impaled at the top of the spire. A creature can use an action to make a DC 12 Strength check, freeing the implaced creature on a success. The impaled creature is also freed if the spire is destroyed. The spire is an object with AC 16, 30 hit points and immunity to poison and psychic damage." }
legendary_actions:
    - { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: 'Shake the Foundation', desc: 'The dragon causes the ground to roil, creating a permanent, 40-foot-radius area of difficult terrain centered on a point the dragon can see. If the dragon is bloodied, creatures in the area make a DC 20 Dexterity saving throw, falling prone on a failure.' }
    - { name: 'Slam Attack (Costs 2 Actions)', desc: 'The dragon makes a slam attack.' }
    - { name: 'Entomb (While Bloodied, Costs 3 Actions)', desc: "The dragon targets a creature on the ground within 60 feet, forcing it to make a DC 15 Dexterity saving throw. On a failure, the creature is magically entombed 5 feet under the earth. While entombed, the target is blinded, restrained, and can't breathe. A creature can use an action to make a DC 15 Strength check, freeing an entombed creature on a success." }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Adult Earth Dragon - A5E
```
