---
statblock: true
name: 'Great Wyrm Blue Dragon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Gargantuan
type: Dragon
cr: 25
ac: 22
hp: 814
hit_dice: '44d20 + 352'
speed: '40 ft., burrow 40 ft., fly 80 ft., swim 40 ft.'
stats:
    - 28
    - 10
    - 26
    - 18
    - 16
    - 20
damage_immunities: lightning
saves:
    dexterity: 8
    constitution: 16
    wisdom: 11
    charisma: 13
skillsaves:
    perception: 11
    stealth: 8
    survival: 11
senses: 'blindsight 60 ft., tremorsense 60 ft., darkvision 120 ft., passive Perception 24'
languages: 'Common, Draconic, two more'
traits:
    0: { name: 'Desert Farer', desc: 'The dragon ignores difficult terrain or obscurement caused by sand or gravel, even while flying. Additionally, it ignores the effects of extreme heat.' }
    1: { name: 'Dune Splitter', desc: 'The dragon can remain submerged in sand and gravel for up to 4 hours. It has advantage on Stealth checks made to hide in this way, and Large or smaller creatures within 20 feet of its hiding place when it emerges must succeed on a DC 24 Dexterity saving throw or be blinded until the end of its next turn.' }
    2: { name: 'Legendary Resistance (3/Day)', desc: 'When the dragon fails a saving throw, it can choose to succeed instead. When it does, it sheds some of its scales, which turn to sand. If it has no more uses of this ability, its Armor Class is reduced to 20 until it finishes a long rest.' }
    3: { name: 'High Voltage (1/Day)', desc: "When the dragon is first bloodied, it immediately recharges its breath weapon, if it's not already available. After doing so, the air around it becomes electrically charged. A creature that starts its turn within 15 feet of the dragon or moves within 15 feet of it for the first time on a turn makes a DC 24 Dexterity saving throw. On a failure, it takes 11 (2d10) lightning damage and can't take reactions until the start of its next turn. Creatures in metal armor or wielding metal weapons have disadvantage on this saving throw." }
    4: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 21). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:blur, silent image, blight, hypnotic pattern', ' 1/day each:control water, mirage arcane,antipathy/sympathy']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws. In place of its bite attack, it can use Arc Lightning.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +17 to hit, reach 15 ft., one target. Hit: 31 (4d10 + 9) piercing damage plus 9 (2d8) lightning damage.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +17 to hit, reach 10 ft., one target. Hit: 22 (3d8 + 9) slashing damage.' }
    - { name: Tail, desc: 'Melee Weapon Attack: +17 to hit, reach 20 ft., one target. Hit: 22 (3d8 + 9) bludgeoning damage, and the dragon pushes the target 10 feet away.' }
    - { name: 'Arc Lightning', desc: "The dragon targets a creature within 60 feet, forcing it to make a DC 24 Dexterity saving throw. The creature takes 22 (4d10) lightning damage on a failure or half damage on a success. Also on a failure, the lightning jumps. Choose a creature within 30 feet of the target that hasn't been hit by this ability on this turn, and repeat the effect against it, possibly causing the lightning to jump again." }
    - { name: 'Lightning Breath (Recharge 56)', desc: "The dragon exhales a 120-foot-long, 10-foot-wide line of lightning. Each creature in that area makes a DC 24 Dexterity saving throw, taking 94 (17d10) lightning damage on a failed save or half damage on a success. A creature that fails the save can't take reactions until the end of its next turn." }
    - { name: Quake, desc: 'While touching natural ground, the dragon sends pulses of thunder rippling through it. Creatures within 30 feet make a DC 24 Strength saving throw, taking 22 (4d10) bludgeoning damage and falling prone on a failure. If a Large or smaller creature that fails the save is standing on sand, it also sinks partially, becoming restrained as well. A creature restrained in this way can spend half its movement to escape.' }
reactions:
    - { name: 'Tail Attack', desc: 'When a creature the dragon can see within 10 feet hits the dragon with a melee attack, the dragon makes a tail attack against it.' }
'legendary actions':
    0: { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    1: { name: Roar, desc: "Each creature of the dragon's choice within 120 feet that can hear it makes a DC 21 Charisma saving throw. On a failure, it is frightened for 1 minute. A creature repeats the saving throw at the end of its turns, ending the effect on itself on a success. When it succeeds on a saving throw or the effect ends for it, it is immune to Roar for 24 hours." }
    2: { name: 'Wing Attack', desc: 'The dragon beats its wings. Each creature within 15 feet makes a DC 24 Dexterity saving throw. On a failure, it is pushed 10 feet away and knocked prone. The dragon can then fly up to half its fly speed.' }
    3: { name: 'Quake (Costs 2 Actions)', desc: 'The dragon uses its Quake action.' }
    'legendary actions': ['The dragon has the following additional legendary actions, which it can use only while bloodied:']
    4: { name: 'Elite Recovery', desc: 'The dragon ends one negative effect currently affecting it. It can do so as long as it has at least 1 hit point, even while unconscious or incapacitated.' }
    5: { name: 'Mortal Terror (Gaze)', desc: 'A creature within 120 feet makes a saving throw against Roar, even if it has already successfully saved within the past 24 hours.' }
    6: { name: 'Storm Surge (Costs 2 Actions)', desc: 'The dragon recharges its breath weapon.' }
    7: { name: 'Thunderstrike (Costs 3 Actions)', desc: "The dragon strikes a creature within 120 feet with a blast of electricity. The creature is affected as if caught in the dragon's breath weapon, rolling to save as normal." }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Great Wyrm Blue Dragon - A5E
```
