---
statblock: true
name: 'Great Wyrm Red Dragon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Gargantuan
type: Dragon
cr: 26
ac: 22
hp: 897
hit_dice: '46d20 + 414'
speed: '40 ft., climb 40 ft., fly 80 ft.'
stats:
    - 30
    - 10
    - 28
    - 18
    - 16
    - 22
damage_immunities: fire
saves:
    - { dexterity: 8 }
    - { constitution: 17 }
    - { wisdom: 11 }
    - { charisma: 14 }
skillsaves:
    - { intimidation: 14 }
    - { perception: 11 }
    - { stealth: 8 }
senses: 'blindsight 60 ft., darkvision 120 ft., passive Perception 24'
languages: 'Common, Draconic, two more'
traits:
    0: { name: 'Legendary Resistance (3/Day)', desc: 'When the dragon fails a saving throw, it can choose to succeed instead. When it does, it sheds some of its scales, which turn to charcoal. If it has no more uses of this ability, its Armor Class is reduced to 20 until it finishes a long rest.' }
    1: { name: 'Searing Heat', desc: 'A creature that touches the dragon or hits it with a melee attack for the first time on a turn takes 14 (4d6) fire damage.' }
    2: { name: 'Volcanic Tyrant', desc: 'The dragon is immune to the effects of poisonous gases caused by volcanic environments. It also ignores difficult terrain caused by lava.' }
    3: { name: 'Seething Rage', desc: "When the dragon is first bloodied, it immediately recharges its breath weapon, if it's not already available. Its inner flame erupts, burning brightly in its eyes and mouth. After taking damage from its Searing Heat ability, a creature with resistance to fire damage loses it, and a creature with immunity to fire damage reduces it to resistance. Either effect lasts until the start of the creature's next turn." }
    4: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 22). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:command, hold person, glyph of warding, wall of fire', ' 1/day each:antimagic field, dominate monster, storm of vengeance']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws. In place of its bite attack, it can Spit Fire.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +18 to hit, reach 15 ft., one target. Hit: 32 (4d10 + 10) piercing damage plus 9 (2d8) fire damage.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +18 to hit, reach 10 ft., one target. Hit: 28 (4d8 + 10) slashing damage.' }
    - { name: Tail, desc: 'Melee Weapon Attack: +18 to hit, reach 20 ft., one target. Hit: 23 (3d8 + 10) bludgeoning damage, and the dragon pushes the target 10 feet away.' }
    - { name: 'Cruel Tyranny', desc: 'The dragon snarls and threatens its minions, driving them to immediate action. The dragon chooses one creature it can see and that can hear the dragon. The creature uses its reaction to make one weapon attack with advantage. If the dragon is bloodied, it can use this ability on three minions at once.' }
    - { name: 'Spit Fire', desc: 'The dragon targets a creature within 60 feet, forcing it to make a DC 22 Dexterity saving throw. The creature takes 22 (4d10) fire damage on a failure or half damage on a success. A creature that fails the save also takes 11 (2d10) ongoing fire damage. A creature can use an action to end the ongoing damage.' }
    - { name: 'Fire Breath (Recharge 56)', desc: 'The dragon exhales a blast of fire in a 90-foot cone. Each creature in that area makes a DC 25 Dexterity saving throw, taking 98 (28d6) fire damage on a failed save or half damage on a success. A creature that fails the saving throw also takes 11 (2d10) ongoing fire damage. While affected by this ongoing damage, it is frightened of the dragon. A creature can use an action to end the ongoing damage.' }
reactions:
    - { name: 'Tail Attack', desc: 'When a creature the dragon can see within 10 feet hits the dragon with a melee attack, the dragon makes a tail attack against it.' }
    - { name: Taskmaster, desc: 'When a creature within 60 feet fails an ability check or saving throw, the dragon roars a command to it. The creature can roll a d10 and add it to the result of the roll, possibly turning the failure into a success.' }
legendary_actions:
    0: { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    1: { name: 'Cruel Tyranny', desc: 'The dragon uses its Cruel Tyranny action.' }
    2: { name: Roar, desc: "Each creature of the dragon's choice within 120 feet that can hear it makes a DC 22 Charisma saving throw. On a failure, it is frightened for 1 minute. A creature repeats the saving throw at the end of its turns, ending the effect on itself on a success. When it succeeds on a saving throw or the effect ends for it, it is immune to Roar for 24 hours." }
    3: { name: 'Wing Attack', desc: 'The dragon beats its wings. Each creature within 15 feet makes a DC 25 Dexterity saving throw. On a failure, it is pushed 10 feet away and knocked prone. The dragon can then fly up to half its fly speed.' }
    legendary_actions: ['The dragon has the following additional legendary actions, which it can use only while bloodied:']
    4: { name: 'Elite Recovery', desc: 'The dragon ends one negative effect currently affecting it. It can do so as long as it has at least 1 hit point, even while unconscious or incapacitated.' }
    5: { name: 'Mortal Terror (Gaze)', desc: 'A creature within 120 feet makes a saving throw against Roar, even if it has already successfully saved within the past 24 hours.' }
    6: { name: 'Backdraft (Costs 2 Actions)', desc: 'The dragon recharges its breath weapon.' }
    7: { name: 'Plasma Blast (Costs 3 Actions)', desc: "The dragon spits a ball of white-hot fire at a creature it can see within 90 feet. The creature is affected as if caught in the dragon's breath weapon, rolling to save as usual." }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Great Wyrm Red Dragon - A5E
```
